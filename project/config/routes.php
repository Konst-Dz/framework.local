<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'),
        new Route('/my-page1/', 'page', 'show1'),
        new Route('/my-page2/', 'page', 'show2'),
        new Route('/my-act1/', 'test', 'test1'),
        new Route('/my-act2/', 'test', 'test2'),
        new Route('/my-act3/', 'test', 'test3'),
        new Route('/nums/:n1/:n2/:n3/','num','sum'),
        //new Route('/user/:id/','user','show'),
        new Route('/user/:id/:key/','user','info'),
        new Route('/user/:all/','user','all'),
        //new Route('/page/', 'page', 'act'),
        new Route('/product/:n/', 'product', 'show'),
        // роут для приветственной страницы, можно удалить
	];
	
