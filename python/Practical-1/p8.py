num=int(input("Enter Number : "));
r=0;
no=int(num);
while no > 0:
    a=no%10;
    r=(r*10)+a;
    no=no/10;
print(r);
