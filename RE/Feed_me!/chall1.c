#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#include<openssl/md5.h>

void succeed()
{
	printf("*************You filled my apetite******************\nValidate the challenge with the password");
	exit(0);
}

void fail()
{
	printf("******************* May be you need to give me correct food!***********************\n");
	exit(0);
}

void function1(char* a,char* b)
{
	int i;
	char a1[2],b1[2];
	a1[1]='\0';
	b1[1]='\0';
	for(i=0;a[i]!='\0';i++)
	{
		a1[0]=a[i];
		b1[0]=b[i];
		int tmp=atoi(a1)^atoi(b1);
		a[i]=tmp;
		printf("%c",a[i]);
	}
}

void function3(char* a,char* ans)
{
	MD5(a,sizeof(a)/sizeof(a[0]),ans);
}

int gcd(int a, int b)
{
    if (b == 0)
        return a;

    else
        return gcd(b, a % b);
}

void function2(char* a)
{
	int n = sizeof(a)/sizeof(a[0]);
	int d = 5;
	int g_c_d = gcd(d, n);
    	for (int i = 0; i < g_c_d; i++) {
        	int temp = a[i];
        	int j = i;

        	while (1) {
			int k = j + d;
            		if (k >= n)
                		k = k - n;

            		if (k == i)
                		break;

            		a[j] = a[k];
            		j = k;
        	}
        	a[j] = temp;
    	}

}

int main()
{
	char ans[33];
	char string[]={"\x23\x49\x20\x61\x6d\x20\x6a\x75\x73\x74\x20\x40\x20\x72\x61\x6e\x64\x6f\x6d\x20\x73\x74\x72\x69\x6e\x67\x73\x2e\x2e\x2e\x70\x79\x74\x68\x6f\x6e\x20\x2d\x76\0"};
	printf("************************I am Hungry! Give me Something to Eat*********************\nEnter the Food:");
	char password[34];
	scanf("%s",&password);
	function1(password,string);
	//function2(password);
	printf("Function2:%s\n",password);
	function3(password,ans);
	printf("Function3:%02x\n",ans);
	int correct = (strcmp("0d107d09f5bbe40cade3de5c71e9e9b7\n\0",ans)==0);
	if (correct)
		succeed();
	else
		fail();
}
