<?php
function totalReviews ($pdo) {
    $query = $pdo->query('SELECT COUNT(*) FROM review');
    $query ->execute();
    $row = $query->fetch();
    return $row[0];
}
?>

<?php
function getReviews($pdo)
{
    $sql = 'SELECT review.id, review.reviewtext, review.reviewdate, 
                film.title, film.poster, review.reviewername
            FROM review
            JOIN film ON review.filmid = film.id';

    return $pdo->query($sql)->fetchAll();
}
?>

<?php
function query($pdo, $sql, $parameters = [])
{
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}
?>

<?php
function addReviews($pdo, $text, $name, $film)
{   
    $sql = "INSERT INTO review
            SET reviewtext = :text,
                reviewername = :name,
                filmid = :film,
                reviewdate = CURDATE()";
    $parameters = [
        'text' => $text,
        'name' => $name,
        'film' => $film
    ];
    query($pdo, $sql, $parameters);
}
?>

<?php
function updateReviews($pdo, $id, $text)
{
    $sql = "UPDATE review
            SET reviewtext = :text
            WHERE id = :id";
    $parameters = [
        'text' => $text,
        'id' => $id
    ];
    query($pdo, $sql, $parameters);
}
?>

<?php
function deleteReviews($pdo, $id)
{
    $sql = "DELETE FROM review WHERE id = :id";
    $parameters = ['id' => $id];
    query($pdo, $sql, $parameters);
}
?>
