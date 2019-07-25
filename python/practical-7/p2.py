import sys;
args=sys.argv;
n1=int(args[1]);
n2=int(args[2]);
if (n1<n2):
    for n1 in range(n2):
        if(n1%2==0):
            print(n1);
else:
    i=n2;
    while(i>=n1):
        print(i);
        i=i+1;
