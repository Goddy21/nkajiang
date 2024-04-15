<? php
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$password = $_POST['password'];
	$option = $_POST['option'];
	
	$conn = new mysqli('localhost', 'root', '','nkijang');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(firstname, surname, age, email, number, password, option) 
		values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssisiss", $firstname, $surname, $age, $email, $number, $password, $option);
		$stmt->execute();
		echo "registration successfull...";
		$stmt->close();
		$conn->close();
	}
?>