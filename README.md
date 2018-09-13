# Packer

## PHP Command line Script For File Compression

### Requirements
- php
- Composer

### Installation

- fetch codebase
```
git clone git@github.com:cmpalce/packer.git
cd packer
composer install
```

### Usage

- Script file: scripts/packer

- Options:
```
-i/--input <argument>
     Required. String to be compressed input file path with name.


-o/--output <argument>
     Required. Ouput file path with name of the compressed string.


-t/--type <argument>
     Required. Value is "compress" or "uncompress".
```

- Compress sample:
```
php scripts/packer.php --input /home/vagrant/Code/packager/demo/test.txt --output /home/vagrant/Code/packager/demo/output.txt --type compress
```

- Uncompress sample:
```
php scripts/packer.php --input /home/vagrant/Code/packager/demo/output.txt --output /home/vagrant/Code/packager/demo/uncompressed.txt --type uncompress
```

### Auto Test
- Run in project root:

```
./vendor/bin/phpunit tests
```
