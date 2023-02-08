Array
(
    [first_name] => vala 
    [last_name] => yashpal
    [email] => vala1@gmail.com
    [f_password] => 1234
    [l_password] => 1234
    [age] => 24
    [Dob] => 2000-06-12
    [city] => somnath(gir)
    [gender] => female
    [language] => Array
        (
            [0] => css
            [1] => php
        )

    [submit] => submit
)

Array
(
    
)

CREATE TABLE user_det(id INT AUTO_INCREMENT PRIMARY KEY,
							first_name VARCHAR(250) NOT NULL,
							last_name VARCHAR(250) NOT NULL,
							email VARCHAR(50) NOT NULL,
							f_password VARCHAR(50) NOT NULL,
							l_password VARCHAR(50) NOT NULL,
							age INT(10) NOT NULL ,
							Dob DATE NOT NULL ,
							city VARCHAR(50),
							gender VARCHAR(50) NOT NULL);