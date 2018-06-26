<?php

class ControllerUsers{
		/*==================================
	=            Login User            =
	==================================*/
	static public function ctrLoginUser(){
		if(isset($_POST["logUser"])){
			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["logUser"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["logPass"])){
				$table="users";
				$column="user";
				$value=$_POST["logUser"];
				$response=ModelUsers::MdlShowUsers($table, $column, $value);
				if($response["user"]==$_POST["logUser"] && $response["pass"]==$_POST["logPass"]){
					$_SESSION["loginSession"]="approved";
					echo '<script>window.location="check";</script>';
				}else{
					echo '<br><div class="alert alert-danger">Erro ao iniciar sessão. Por favor tente novamente.</div>';
				}
			}
		}
	}

	/*===================================
	=            Create User            =
	===================================*/
	
	static public function ctrCreateUser(){
		if(isset($_POST["newUser"])){
			if(preg_match('/^[a-zA-Z0-9áÁàÀéÉíÍóÓúÚãâ ]+$/', $_POST["newName"]) &&
				preg_match('/^[a-zA-Z0-9]+$/', $_POST["newUser"]) &&
				preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["newPass"])){
				$table="users";
				$data=array("name"=>$_POST["newName"],
					"user"=>$_POST["newUser"],
					"pass"=>$_POST["newPass"],
					"power"=>$_POST["newPower"]);
				$response=ModelUsers::mdlCreateUser($table, $data);
				if($response=="ok"){
					echo '<script>
						swal({
							icon: "success",
							title: "Utilizador Guardado!",
							button: "Fechar",
							}).then((result)=>{
								if(result.value){
									window.location="users";
								}
								});
					</script>';
				}
			}else{
				echo '<script>
					swal({
						icon: "error",
						title: "O Username não pode ser vazio ou usar caracteres especiais.",
						button: "Fechar",
						}).then((result)=>{
							if(result.value){
								window.location="users";
							}
							});
				</script>';
			}
		}
	}
}