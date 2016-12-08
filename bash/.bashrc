# .bashrc

# Source global definitions
if [ -f /etc/bashrc ]; then
	. /etc/bashrc
fi

# hands on exercise 1.1
alias rm='rm -i'
alias c='clear'
alias vi='vim'
alias rl='source ~/.bashrc'
PS1='\w \$ '
