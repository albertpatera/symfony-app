<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\ORMException as ORMExceptionAlias;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Debug\Debug;


/**
 * Repositář pro správu článků v redakčním systému.
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 * @package App\Repository
 */
class ArticleRepository extends ServiceEntityRepository
{
    /** @inheritdoc */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Article::class);
    }

    /**
     * Vrátí článek z databáze podle jeho URL.
     * @param string $url URl článku
     * @return Article|null první článek, který má danou URL nebo null pokud takový neexistuje
     * @throws ORMExceptionAlias
     */

    public function findOneByUrl(string $url): ?string
    {
        $this->findOneBy(['url' => $url]);


        if($this->findOneBy(['url' => $url])) {
            return strtoupper($url);
        } else {
            return false;
        }
        //return $this->findOneBy(['url' => 'url']);
    }




    //only one times, after will be deleted

    public function getAllRows()
    {
        $qb = $this->getDefaultEntityManager();
    }


    public function findOneById(int $id) : ?int
    {
        $findById = $this->findOneBy(['id' => $id]);
        if($findById)
        {
            return 1;
        } else {
            return 0;
        }
       // return $this->findOneBy(['id' => $id]);
    }

    public function all()
    {

    }



    /**
     * Uloží článek do systému.
     * Pokud není nastaveno ID, vloží nový, jinak provede editaci.
     * @param Article $article článek
     * @throws ORMExceptionAlias Jestliže nastane chyba při ukládání článku.
     */

    public function save(Article $article): ? Article
    {
        try {
            $this->getEntityManager()->persist($article);
        } catch (ORMExceptionAlias $e) {
        }
        try {
            $this->getEntityManager()->flush($article);
        } catch (OptimisticLockException $e) {
        } catch (ORMExceptionAlias $e) {
        }
    }



    /**
     * Odstraní článek s danou URL.
     * @param string $url URL článku
     * @throws ORMExceptionAlias Jestliže nastane chyba při mazání článku.
     */
    public function removeByUrl(string $url): Article
    {
        if (($article = $this->findOneByUrl($url))) {
            $this->getEntityManager()->remove($article);
            $this->getEntityManager()->flush();
        }
    }

    public function getArticles()
    {
        try {
            $this->findAll();
            echo "čščč";
        } catch (ORMException $exception) {
            throw new \Exception('super');
        }
        $this->findAll();
    }

    public function getDefaultEntityManager()
    {
       $em = $this->getEntityManager();
       $qb = $this->createQueryBuilder('qb');
       $qb->select('id')
           ->from('article', 'a')
           ->where('id = 1')
           ->orderBy('id', 'DESC');

       return $this->findAll();
    }


}