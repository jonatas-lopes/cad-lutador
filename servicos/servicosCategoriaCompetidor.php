<?php




function defineCategoriaCompetidor(string $nome,string $peso,string $sexo) : ?string{


    $categoria = [];
    $categoria[] = 'peso-leve';
    $categoria[] = 'peso-medio';
    $categoria[] = 'peso-pesado';
    


        if(validaCampo($nome,$peso,$sexo)){
           
            
            if($peso >= 60 && $peso <= 75){
                for($i=0; $i <= count($categoria) -1; $i++){
                    if($categoria[$i] == 'peso-leve'){
                        if($sexo == 'masculino'){
                           setarMensagemSucesso("Lutador ".$nome. " com peso atual de ".$peso. " ira competir na categoria ".$categoria[$i]);
                           return null;
                        }
                        if($sexo == 'feminino'){
                            setarMensagemSucesso("Lutador ".$nome. " com peso atual de ".$peso. " ira competir na categoria ".$categoria[$i]);
                           return null;
                        }else{
                            setarMensagemSucesso("Por favor digite um sexo valido");
                            return null;
                        }
                        
                    }
                }
            
            
            
            }elseif($peso >= 76 && $peso <= 90){
                for($i=0; $i <= count($categoria) -1; $i++){
                    if($categoria[$i] == 'peso-medio'){
                        if($sexo == 'masculino'){
                            setarMensagemSucesso("Lutador ".$nome. " com peso atual de ".$peso. " ira competir na categoria ".$categoria[$i]);
                            return null;
                        }
                        if($sexo == 'feminino'){
                            setarMensagemSucesso("Lutador ".$nome. " com peso atual de ".$peso. " ira competir na categoria ".$categoria[$i]);
                            return null;
                        }else{
                           setarMensagemSucesso("Por favor digite um sexo valido");
                           return null;
                        }
                        
                    }
                }
            
            
            
            }elseif($peso >= 91 && $peso <= 120){
                for($i=0; $i <= count($categoria) -1; $i++){
                    if($categoria[$i] == 'peso-pesado'){
                        if($sexo == 'masculino'){
                            setarMensagemSucesso("Lutador ".$nome. " com peso atual de ".$peso. " ira competir na categoria ".$categoria[$i]);
                            return null;
                        }
                        if($sexo == 'feminino'){
                            setarMensagemSucesso("Lutador ".$nome. " com peso atual de ".$peso. " ira competir na categoria ".$categoria[$i]);
                            return null;
                        }else{
                            setarMensagemSucesso("Por favor digite um sexo valido");
                            return null;
                        }
                        
                    }
                }
            
            
            
            }else{
                setarMensagemSucesso("Você não possui peso que se adeque a nenhuma competição");
                return null;
            }
                









        }else {
            
            return obterMensagemErro();
        }






    }



?>