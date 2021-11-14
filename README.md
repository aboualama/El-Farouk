
# install
###### To install a follow the instructions below.


## - Clone 
```bash
 git clone https://github.com/aboualama/El-Farouk.git 
```
```bash 
 cd El-Farouk 
```
 
## - Autoloader Optimization 
```bash
 composer update 
```
```bash 
 npm install && npm run dev
```
 
## - Create .ENV files settings 
```bash 
 cp .env.example .env 
```
 
## - Create key APP_KEY in ENV file
```bash 
 php artisan key:generate
```

## - Setup Database Configurations or import it
```bash 
 php artisan migrate:fresh --seed
```
 
## -  Optimization 
```bash 
 php artisan config:cache
```
```bash 
 php artisan optimize:clear
```


## License
[El-Farouk](https://aboualama.com/)
