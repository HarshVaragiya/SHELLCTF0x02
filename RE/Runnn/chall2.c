#include <stdio.h>
#include <string.h>
#include <sys/ptrace.h>
#include <unistd.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>
#include <stdlib.h>
 
#define PASSWORD ".passwd"
#define TMP1 "/tmp/"
#define TMP2 "tmp_file.txt"
#define TMP_FILE TMP1 TMP2
int main(void)
{
  int fd_tmp, fd_rd;
  char ch;
 
 
  if (ptrace(PTRACE_TRACEME, 0, 1, 0) < 0)
    {
      printf("[-] Don't use a debugguer !\n");
      abort();
    }
  if((fd_tmp = open(TMP_FILE, O_WRONLY | O_CREAT, 0444)) == -1)
    {
      perror("[-] Can't create tmp file!");
      goto end;
    }
 
  if((fd_rd = open(PASSWORD, O_RDONLY)) == -1)
    {
      perror("[-] Can't open file ");
      goto end;
    }
 
  while(read(fd_rd, &ch, 1) == 1)
    {
      write(fd_tmp, &ch, 1);
    }
  close(fd_rd);
  close(fd_tmp);
end:
  unlink(TMP_FILE);
 
  return 0;
}
