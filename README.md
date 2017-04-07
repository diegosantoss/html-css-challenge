Para apenas visualizar o projeto:
	1) Abrir a pasta raiz do projeto.

	2) Abrir o arquivo.html dentro da pasta ./dist/


Caso queiram modificar é preciso seguir os passos abaixo.

	1) Para rodar o projeto será preciso instalar os seguintes programas:	
		- Node JS ( https://nodejs.org/en/download/ )


		Plugin LiveReload para o navegador ( apenas clicar para ativa-lo, após de iniciar o projeto )

		* Chrome 
		- ( https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei )

		* Mozilla
		- ( https://addons.mozilla.org/pt-br/firefox/addon/livereload/ ) PS: Para ativa-lo é preciso ir em menu -> personalizar e arrastar o icone do livereload para a barra de ferramentas.


	2) Após a instalação do mesmo, abra o CMD e entre na pasta raiz do projeto.

	3) Digite o comando npm install

	4) após rodar o comando npm install, digite gulp watch para iniciar o projeto.

	5) Se houver algum erro, rode o seguinte comando: npm install --save-dev  del gulp gulp-cache gulp-cssnano gulp-if gulp-imagemin gulp-livereload gulp-minify-html gulp-plumber gulp-replace gulp-sass gulp-uglify gulp-useref gulp-util run-sequence

	6) Inicie novamente o projeto com o comando gulp watch.

	7) Abra o arquivo .html dentro a pasta ./src/ e não se esqueça de ativar o livereload no navegador.

	8) Faça as alterações necessárias.

	9) Após as alterações é preciso digitar o comando gulp build no cmd para gerar a versão final do site que se encontrará na pasta ./dist/