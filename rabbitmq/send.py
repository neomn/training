import sys
import pika
connection = pika.BlockingConnection(pika.ConnectionParameters("backend_broker"))
channel = connection.channel()

message = ''.join(sys.argv[1:]) or 'hello world'

channel.queue_declare(
    queue="hello",
    durable = True,
)
channel.basic_publish(
    exchange = '',
    routing_key = 'hello',
    body = message,
    properties = pika.BasicProperties(
        delivery_mode = pika.spec.PERSISTENT_DELIVERY_MODE
    )
)
connection.close()
