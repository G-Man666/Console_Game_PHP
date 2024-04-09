install:
	composer install
brain-games:
	./bin/brain-games
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 --colors src bin
lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12  src bin
brain-even:
	./bin/brain-even
brain-gcd:
	./bin/brain-gcd
brain-progression:
	./bin/brain-progression
brain-calc:
	./bin/brain-calc
brain-prime:
	./bin/brain-prime
php-stan:
	vendor/bin/phpstan analyse src --level=9

