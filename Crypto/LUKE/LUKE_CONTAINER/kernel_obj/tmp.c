#include<linux/kernel.h>
#include<linux/module.h>
#include<linux/init.h>

MODULE_LICENSE("GPL");
MODULE_DESCRIPTION("Definitely not a rootkit!");
MODULE_AUTHOR("shellpwn");

static int __init main(void)
{
	printk(KERN_ALERT "Here is your flag: shellctf{k3rneL_0bj3ct$_aR3_fUn}");
	return 0;
}

static void __exit clean(void)
{
	printk(KERN_INFO "Rootkit Disconnected :(");
}

module_init(main);
module_exit(clean);
