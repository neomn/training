testcase_count = input()
testcase_count = int(testcase_count)

for i in range(testcase_count):
    pairs_count = input()
    pairs_count = int(pairs_count)
    
    state = input()
    state_list = state.split(" ")
    
    faliure = 0
    p1, p2 = 0, 1
    for s in range(pairs_count):
        if state_list[p1][1] != state_list[p2][1]:
            faliure += 1
        if faliure >2:
            print('NO')
            break
        p1 += 2
        p2 += 2
       
    if faliure < 3:
        print('YES')

