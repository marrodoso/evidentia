GRANT USAGE ON *.* TO 'homestead'@localhost IDENTIFIED BY 'secret';
GRANT USAGE ON *.* TO 'homestead'@'%' IDENTIFIED BY 'secret';
GRANT ALL privileges ON `basetest`.* TO 'homestead'@localhost;
GRANT ALL privileges ON `basetest`.* TO 'homestead'@'%';
FLUSH PRIVILEGES;
