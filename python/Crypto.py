from secrets import compare_digest
from pqcrypto.kem.mceliece8192128 import generate_keypair, encrypt, decrypt

public_key, secret_key = generate_keypair()
ciphertext, plaintext_original = encrypt(public_key)
plaintext_recovered = decrypt(secret_key, ciphertext)
assert compare_digest(plaintext_original, plaintext_recovered)
