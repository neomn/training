data = input()
r, c = data.split(" ")
r, c = int(r) ,int(c)

r = r if r==1 else r+1

l1 = [' -' for i in range(r)]
l2 = ['| ' for j in range(c+1)]

for i in range(r):
    print(''.join(l1))
    print(''.join(l2))
print(''.join(l1))
