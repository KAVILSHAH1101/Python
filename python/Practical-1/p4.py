no=int (input("Enter Roll Number :"));
name=str(input("Enter Name :"));
sub1=int (input("Enter Marks 1 :"));
sub2=int (input("Enter Marks 2 :"));
sub3=int (input("Enter Marks 3 :"));
sub4=int (input("Enter Marks 4 :"));
total=sub1+sub2+sub3+sub4;
avg=total/4;
if avg>70:
    grade="Distinction";
elif avg>60:
    grade="First Class";
elif avg>50:
    grade="Second Class";
elif avg>40:
    grade="Pass";
else:
    grade="Fail";
print("Rollno\tName\tSub1\tSub2\tSub3\tSub4\tTotal\tAvg\tGrade");
print(no,"\t",name,"\t",sub1,"\t",sub2,"\t",sub3,"\t",sub4,"\t",total,"\t",avg,"\t",grade);
