#include <stdio.h>

float calculatePercentage(int m1, int m2, int m3, int m4, int m5)
{
    int total = m1 + m2 + m3 + m4 + m5;
    float percentage = (total * 100.0) / 500;
    return percentage;
}

int main()
{
    int m1, m2, m3, m4, m5;

    printf("Enter marks of 5 subjects: ");
    scanf("%d %d %d %d %d", &m1, &m2, &m3, &m4, &m5);

    float percentage = calculatePercentage(m1, m2, m3, m4, m5);

    printf("Percentage = %.2f%%\n", percentage);

    return 0;
}