all: build install

fresh:
	git pull
	composer update

install:
	echo install
	
build:
	echo build

clean:
	rm -rf debian/ease-framework-bricks
	rm -rf debian/ease-framework-bricks-doc
	rm -rf debian/*.log
	rm -rf docs/*

doc:
	debian/apigendoc.sh

test:
	echo sudo service postgresql start ; sudo service postgresql start
	phpunit --bootstrap tests/Bootstrap.php --configuration tests/configuration.xml tests
	codecept run

deb:
	debuild -i -us -uc -b

.PHONY : install
	
