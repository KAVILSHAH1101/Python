n1=int(input("Enter Number n1 :"));
n2=int(input("Enter Number n2 :"));
if (n1<n2):
    for n1 in range(n2):
        if(n1%2==1):
            print(n1);
else:
    i=n2;
    while(i>=n1):
        print(i);
        i=i-1;
