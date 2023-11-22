import pika

connection = pika.BlockingConnection(pika.ConnectionParameters(host = "backend_broker"))
channel = connection.channel()

channel.exchange_declare(
    exchange = 'logs',
    exchange_type = 'fanout',
)

result = channel.queue_declare( queue = '', exclusive = True)
queue_name = result.method.queue
channel.queue_bind(exchange = 'logs', queue = queue_name)

def callback(ch, method, properties, body):
    print(f"this is body > {body}")

channel.basic_consume(
    queue = queue_name, 
    auto_ack = True, 
    on_message_callback = callback,
)
channel.start_consuming()
