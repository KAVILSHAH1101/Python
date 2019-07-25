import sys;
c=len(sys.argv)-1;
args=sys.argv;
i=1;
sum1=0;
a=0;
for i in range(c):
    a=int(args[i]);
    sum1=sum1+a;
print(sum1);
