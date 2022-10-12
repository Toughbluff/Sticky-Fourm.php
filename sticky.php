<form method="POST"
action="<?php $_SERVER['PHP_SELF'] ?>">
<p>Name:
    <input type="text"name="name"
    valu="<?php if (isset($_POST['name']))
    echo $_POST['name']; ?>"> </p>
<p>Email:
    <input type="text"name="email"
    valu="<?php if (isset($_POST['email']))
    echo $_POST['email']; ?>"> </p>
<p><input type="submit"> </p>
</form>

<?php
/*
 Sticky form is basically a form where questions are required
 assigning a submitted feild data from $_POST array to the HTML's tag value attribute with echo retains the entry
 when the fourm is displayed again for completion. As a precaution, the statement should use the isset() function to 
 check that the field was in fact complteted before submission. An message can be assignned to an array to advise
 a user that they need to fill the fourm
 */
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $errors = array();
    if (empty($_POST['name']))

    {
        $errors[] = 'name';
    }
    else
    {
        $name = trim($_POST['name']);
    }
    if (empty($_POST['email']))

    {
        $errors[] = 'email';
    }
    else
    {
        $email = trim($_POST['email']); #its good practice to use trim to get rid of unecessary spaces
    }
    if (!empty($errors))
    {
        echo 'Please enter your ';
        foreach($errors as $msg)
        {
            echo "- $msg";
        }

    }
    else {
        echo "Success! Thanks, $name";
    }
}
?>
