<?php

namespace Ikdoeict\Repository;

class Blogpost extends \Knp\Repository {

	public function getTableName() { return 'blogposts'; }

    public function findAll() {
        return $this->db->fetchAll('SELECT blogposts.title, blogposts.date, authors.firstname,
        authors.lastname, blogposts.author_id, authors.id, blogposts.id FROM blogposts INNER JOIN authors on authors.id = blogposts.author_id');
    }

    public function findDetail($id){
        return $this->db->fetchAssoc('SELECT blogposts.title, blogposts.content, blogposts.date, authors.firstname,
    authors.lastname, blogposts.author_id, authors.id, blogposts.id, blogposts.numcomments
    FROM blogposts INNER JOIN authors on authors.id = blogposts.author_id WHERE blogposts.id = ?', array($id));
    }

    public function findCommentsByBlogId($id) {
        return $this->db->fetchAll('SELECT comments.blogpost_id, comments.content, comments.date, comments.author, comments.email
        FROM comments  WHERE comments.blogpost_id = ?', array($id));
    }

    public function findCommentsByAuthor($id){
        return $this->db->fetchAll('SELECT * FROM blogposts WHERE author_id = ?', array($id));
    }

    public function findTitleByBlogId($id) {
        return $this->db->fetchAssoc('SELECT blogposts.title FROM blogposts WHERE blogposts.id = ?', array($id));
    }
    //SELECT * FROM comments, authors WHERE authors.id = "$id"

}