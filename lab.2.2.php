#include <stdio.h>

void studentDetails(char name[], long long enrollmentNo, int semester)
{
    printf("\nStudent Details:\n");
    printf("Name: %s\n", name);
    printf("Enrollment Number: %lld\n", enrollmentNo);
    printf("Semester: %d\n", semester);
}

int main()
{
    char name[50];
    long long enrollmentNo;
    int semester;

    printf("Enter Student Name: ");
    scanf(" %[^\n]", name);

    printf("Enter Enrollment Number: ");
    scanf("%lld", &enrollmentNo);

    printf("Enter Semester: ");
    scanf("%d", &semester);

    studentDetails(name, enrollmentNo, semester);

    return 0;
}