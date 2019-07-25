import sys;
c=len(sys.argv)-1;
args=sys.argv;
sum1=0;
a=0;
mini=int(args[1]);
maxi=int(args[1]);
for i in range(1,c+1):
    a=int(args[i]);
    sum1=sum1+a;
    if(mini>a):
        mini=a;
    if(maxi<a):
        maxi=a;
print("Sum = ",sum1);
avg=sum1/c;
print("Average = ",avg);
print("Minimum = ",mini);
print("Maximum = ",maxi);
