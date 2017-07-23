# PHP script for adding 256 color output to bash command line output

Usage: colorize('hex color','text');

Example: colorize('008000','Hello World!');


# Additional Info / Troubleshooting

To utilize all 256 colors you will have to update your client if not natively supported like putty.
Under Connection > Data > Terminal-type string change it from xterm to xterm-256color or putty-256color if your server has a terminfo entry it. Usually found in /usr/share/terminfo/p/

