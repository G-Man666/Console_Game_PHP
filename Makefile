install:
	composer install
brain-games:
	./bin/brain-games
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even:
	./bin/brain-even
brain-even:
	./bin/brain-calc
brain-gcd:
	./bin/brain-gcd
