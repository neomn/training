import pika
import time
connection = pika.BlockingConnection(pika.ConnectionParameters('backend_broker'))
channel = connection.channel()

channel.queue_declare(
    'hello',
    durable = True,
)
def callback(ch, method, properties, body):
    print(f"received message > {body.decode()}")
    time.sleep(body.count(b'.'))
    ch.basic_ack(delivery_tag = method.delivery_tag)
    print('done')

channel.basic_consume(
    queue = 'hello',
    on_message_callback = callback
)

print(' [*] Waiting for messages. To exit press CTRL+C')
channel.start_consuming()
channel.basic_qos(prefetch = 1)
if __name__ == '__main__':
    try:
        main()
    except KeyboardInterrupt:
        print('Interrupted')
        try:
            sys.exit(0)
        except SystemExit:
            os._exit(0)
