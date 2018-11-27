<?php
Class
ArticleModel extends Model
{
    public $code;
    public $name;
    public $continent;
    public $surfacearea;
    public $indeyear;
    public $population;
    public $lifeexpectency;
    public $gnp;
    public $gnpold;
    public $localName;
    public $gover;
    public $indeyear;
    public $indeyear;
    public $indeyear;
    public $indeyear;
    public $indeyear;
    public $indeyear;
    public $indeyear;

    public function __construct($id = null)
    {
        parent::__construct();
//        Le reste ne change pas
    }

    //Dans les fonction CRUD on utilisera $this->bdd (défini dans Model)au lieude $bdd
    //Pour une fonction static, on récupère la connexion via le design pattern singleton, en utilisant la méthode getInstance
    public static function  getAll($user_id=null){
        $model=self::getInstance();
        if(!is_null($user_id))
            $req=$model->bdd->prepare('SELECT id FROM article  WHERE id_user ='.$user_id);
        else
            $req=$model->bdd->prepare('SELECT id FROM article');
            $req->execute();
            $articles=array();
        while($row= $req->fetch()){
            $article =new ArticleModel($row['id']);
            $articles[] =$article;
        }
        return $articles;
    }




}