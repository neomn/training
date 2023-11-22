import sys
import pika 

connection = pika.BlockingConnection(
    pika.ConnectionParameters(host = "backend_broker")
)
channel = connection.channel()

channel.exchange_declare(
    exchange = 'logs',
    exchange_type = 'fanout',
)
message = ''.join(sys.argv[1:]) or 'info: hello world'
channel.basic_publish(
    exchange = 'logs',
    routing_key = '',
    body = message
)
connection.close()
