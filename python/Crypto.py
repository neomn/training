from secrets import compare_digest
from pqcrypto.kem.mceliece8192128 import generate_keypair, encrypt, decrypt
from pqcrypto.sign.dilithium4 import generate_keypair, sign, verify

message = b"hi there"
public_key, secret_key = generate_keypair()

signature = sign(secret_key, message)
print(verify(public_key, b"hi there", signature))






