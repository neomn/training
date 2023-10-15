from secrets import compare_digest
from pqcrypto.kem.mceliece8192128 import generate_keypair, encrypt, decrypt
from pqcrypto.sign.dilithium4 import generate_keypair, sign, verify


# verify public key ownership 
public_key, secret_key = generate_keypair()
ciphertext, plaintext_original = encrypt(public_key)
plaintext_recovered = decrypt(secret_key, ciphertext)
print( compare_digest(plaintext_original, plaintext_recovered))


# encrypt a message using private key and verify private key signature using public key 
message = b"hi there"
public_key, secret_key = generate_keypair()
signature = sign(secret_key, message)
print(verify(public_key, b"hi there", signature))






