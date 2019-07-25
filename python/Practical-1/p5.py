no=int (input("Enter EMP No :"));
name=str(input("Enter EMP Name :"));
gen=str(input("Enter Gender :"));
sal1=int (input("Enter Basic Salary :"));
sal=sal1*12;
if gen=="male":
    da=sal*0.80;
    hra=sal*0.10;
    bonus=sal*0.50;
else:
    da=sal*0.70;
    hra=sal*0.15;
    bonus=sal*0.52;
print("Empno\tName\tBasic Salary\tDA\t\tHRA\t\tBonus\t\tNet Salary");
net=sal+da+hra+bonus;
print(no,"\t",name,"\t",sal,"\t",da,"\t",hra,"\t",bonus,"\t",net);
