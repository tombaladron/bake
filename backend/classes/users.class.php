<?php

class Users extends Dbh {

    //getproductos

    public function nombre(){

        $sql = "SELECT nombre FROM productos ;";
        $query = $this->connectValery()-> query($sql);
        $query->execute();
        $fetch= $query->fetchAll(PDO::FETCH_COLUMN);
        return $fetch;
    }
    public function precio(){

        $sql = "SELECT precio FROM productos ;";
        $query = $this->connectValery()-> query($sql);
        $query->execute();
        $fetch= $query->fetchAll(PDO::FETCH_COLUMN);
        return $fetch;
    }
}






//TEMPLATES

    /////USERS & SELECTORS/////


//    protected function setUser($participante, $mail, $empresa, $cargo) {
//    //MYSQL CODE PARA DATABASE
//    $sql= "INSERT INTO usuarios(participante, mail, empresa, cargo) VALUES (?, ?, ?, ?);";
//
//    //CONECTAR A DB
//    $query = $this->connectUsers()->prepare($sql);
//
//    //EJECUTAR EL QUERY
//    $query->execute([$participante, $mail, $empresa, $cargo]);
//
//    }
//
//        public function SelectorEmpresa(){
//            $sql= "SELECT DISTINCT empresa FROM usuarios";
//            $query = $this->connectUsers()-> query($sql);
//            $query->execute();
//
//
//            echo "<select id= 'selectorempresa' name='empresa' value=''>
//                <option>Elige tu empresa</option>";
//            foreach($query as $row){
//                echo "<option value='$row[empresa]'>$row[empresa]</option>";
//            }
//            echo "</select>";
//        }
//        public function SelectorCargo(){
//            $sql= "SELECT DISTINCT cargo FROM usuarios";
//            $query = $this->connectUsers()-> query($sql);
//            $query->execute();
//
//
//            echo "<select id= 'selectorcargo' name='cargo' value=''>
//                <option>Elige tu cargo</option>";
//            foreach($query as $row){
//                echo "<option value='$row[cargo]'>$row[cargo]</option>";
//            }
//            echo "</select>";
//        }
//        public function SelectorPersona(){
//            $sql= "SELECT participante FROM usuarios";
//            $query = $this->connectUsers()-> query($sql);
//            $query->execute();
//
//            echo "<select id= 'selectorpersona' name='participante' value=''>
//                <option>Nombre y apellido</option>";
//            foreach($query as $row){
//                echo "<option value='$row[participante]'> $row[participante]</option>";
//            }
//            echo "</select>";
//        }
//        public function SelectorMail(){
//            $sql= "SELECT DISTINCT mail FROM usuarios";
//            $query = $this->connectUsers()-> query($sql);
//            $query->execute();
//
//
//            echo "<select id= 'selectormail' name='mail' value=''>
//                <option>Elige tu mail</option>";
//            foreach($query as $row){
//                echo "<option value='$row[mail]'>$row[mail]</option>";
//            }
//            echo "</select>";
//        }
//        public function DataBase(){
//
//            $sql= "SELECT * FROM usuarios";
//            $query = $this->connectUsers()-> query($sql);
////            $query->execute();
////            echo
////            "<table class='table'>
////                <thead>
////                    <tr>
////                        <th>id</th>
////                        <th>Participante</th>
////                        <th>Email</th>
////                        <th>Empresa</th>
////                        <th>Cargo</th>
////                        <th>Acciones</th>
////                    </tr>
////                </thead>
////                <tbody>";
////
////                foreach ($query as $fila) {
////                echo
////                "<tr>
////                    <td> $fila[id] </td>
////                    <td> $fila[participante]</td>
////                    <td> $fila[mail]</td>
////                    <td> $fila[empresa]</td>
////                    <td> $fila[cargo]</td>
////                    </tr>";
////                }
////            echo
////            "</table>";
////        }
////        public function Authentication($participante){
//
//
//            $sql = "SELECT cargo, empresa FROM `usuarios` WHERE participante = '$participante';";
//
//            $query = $this->connectUsers()-> query($sql);
//            $query->execute();
//
//            $fetch= $query->fetch();
//
//            return $fetch;
//
//        }
//
//    /////SEND DATA BENZIGER/////
//    public function Benziger($fecha, $Participante, $Genero, $Empresa, $Cargo, $HPI, $HPD, $HFD, $HFI, $INT_HPI, $INT_HPD, $INT_HFD, $INT_HFI, $DOM, $HPI_Por, $HPD_Por, $HFD_Por, $HFI_Por,$DESCRIPTOR_INT_HPI, $DESCRIPTOR_INT_HPD, $DESCRIPTOR_INT_HFD, $DESCRIPTOR_INT_HFI){
//
//        $sql = "INSERT INTO resultadosbenziger (fecha, Participante, Genero, Empresa, Cargo, HPI, HPD, HFD, HFI, INT_HPI, INT_HPD, INT_HFD, INT_HFI, DOM, HPI_Por, HPD_Por, HFD_Por, HFI_Por,DESCRIPTOR_INT_HPI, DESCRIPTOR_INT_HPD, DESCRIPTOR_INT_HFD, DESCRIPTOR_INT_HFI) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
//
//        $query = $this->connectBenziger()->prepare($sql);
//        $query->execute([$fecha, $Participante, $Genero, $Empresa, $Cargo, $HPI, $HPD, $HFD, $HFI, $INT_HPI, $INT_HPD, $INT_HFD, $INT_HFI, $DOM, $HPI_Por, $HPD_Por, $HFD_Por, $HFI_Por,$DESCRIPTOR_INT_HPI, $DESCRIPTOR_INT_HPD, $DESCRIPTOR_INT_HFD, $DESCRIPTOR_INT_HFI]);
//    }
//
//    /////SEND DATA MBTI/////
//    public function MBTI($fecha, $Participante, $Genero, $Empresa, $Cargo, $E, $I ,$N ,$S ,$T ,$F ,$J ,$P, $valorIE ,$valorNS ,$valorFT ,$valorPJ, $tendIE, $tendNS, $tendFT, $tendPJ, $TipoIE, $TipoNS, $TipoFT, $TipoPJ, $IntIE, $IntNS, $IntFT, $IntPJ, $PorIE, $PorNS, $PorFT, $PorPJ, $MBTItype){
//
//        $sql = "INSERT INTO resultadosmbti (fecha, participante, genero, empresa, cargo, Puntaje_E, Puntaje_I ,Puntaje_N ,Puntaje_S ,Puntaje_T ,Puntaje_F ,Puntaje_J ,Puntaje_P, Num_IE ,Num_NS ,Num_FT ,Num_PJ, Tendencia_IE, Tendencia_NS, Tendencia_FT, Tendencia_PJ, I_E, N_S, F_T, P_J, Int_IE, Int_NS, Int_FT, Int_PJ, Por_IE, Por_NS, Por_FT, Por_PJ,Tipo_MBTI) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
//
//        $query = $this->connectMBTI()->prepare($sql);
//        $query->execute([$fecha, $Participante, $Genero, $Empresa, $Cargo, $E, $I ,$N ,$S ,$T ,$F ,$J ,$P, $valorIE ,$valorNS ,$valorFT ,$valorPJ, $tendIE, $tendNS, $tendFT, $tendPJ, $TipoIE, $TipoNS, $TipoFT, $TipoPJ, $IntIE, $IntNS, $IntFT, $IntPJ, $PorIE, $PorNS, $PorFT, $PorPJ, $MBTItype]);
//    }
//
//
//    /////GET DATA MBTI/////
//
//
//        public function GetTipo($e){
//            $sql= "SELECT tipo_MBTI FROM resultadosmbti WHERE participante = '$e';";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetch();
//            return $fetch;
//        }
//        public function GetIE($e){
//            $sql= "SELECT I_E FROM resultadosmbti WHERE participante = '$e';";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetch();
//            return $fetch;
//        }
//        public function GetNS($e){
//            $sql= "SELECT N_S FROM resultadosmbti WHERE participante = '$e';";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetch();
//            return $fetch;
//        }
//        public function GetFT($e){
//            $sql= "SELECT F_T FROM resultadosmbti WHERE participante = '$e';";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetch();
//            return $fetch;
//        }
//        public function GetPJ($e){
//            $sql= "SELECT P_J FROM resultadosmbti WHERE participante = '$e';";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetch();
//            return $fetch;
//        }
//    ////[[[[[[[DATA-MBTI PARA INFORME]]]]]]]
//
//
//        public function GetPalabrasDescriptoras($e){
//            $sql= "SELECT palabras_descriptoras FROM $e WHERE palabras_descriptoras IS NOT NULL;";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetchAll(PDO::FETCH_COLUMN);
//            return $fetch;
//        }
//        public function GetDescriptorGeneral($e){
//            $sql= "SELECT manual_descriptorGeneral FROM $e WHERE manual_descriptorGeneral IS NOT NULL;";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetchAll(PDO::FETCH_COLUMN);
//            return $fetch;
//        }
//        public function GetContribucionesOrganización ($e){
//            $sql= "SELECT manual_contribucionesOrganización FROM $e WHERE manual_contribucionesOrganización IS NOT NULL;";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetchAll(PDO::FETCH_COLUMN);
//            return $fetch;
//        }
//        public function GetEstiloLiderazgo ($e){
//            $sql= "SELECT manual_estiloLiderazgo FROM $e WHERE manual_estiloLiderazgo IS NOT NULL;";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetchAll(PDO::FETCH_COLUMN);
//            return $fetch;
//        }
//        public function GetAmbienteLaboralPreferido ($e){
//            $sql= "SELECT manual_ambienteLaboralPreferido FROM $e WHERE manual_ambienteLaboralPreferido IS NOT NULL;";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetchAll(PDO::FETCH_COLUMN);
//            return $fetch;
//        }
//        public function GetFallasPotenciales ($e){
//            $sql= "SELECT manual_fallasPotenciales FROM $e WHERE manual_fallasPotenciales IS NOT NULL;";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetchAll(PDO::FETCH_COLUMN);
//            return $fetch;
//        }
//        public function GetSugerenciasDesarrollo($e){
//            $sql= "SELECT manual_sugerenciasDesarrollo FROM $e WHERE manual_sugerenciasDesarrollo IS NOT NULL;";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetchAll(PDO::FETCH_COLUMN);
//            return $fetch;
//        }
//        public function GetJungDescriptor ($e){
//            $sql= "SELECT jung_descriptor FROM $e WHERE jung_descriptor IS NOT NULL;";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetchAll(PDO::FETCH_COLUMN);
//            return $fetch;
//        }
//        public function GetJungDescripcion ($e){
//            $sql= "SELECT jung_descripcion FROM $e WHERE jung_descripcion IS NOT NULL;";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetchAll(PDO::FETCH_COLUMN);
//            return $fetch;
//        }
//        public function GetJungSombra  ($e){
//            $sql= "SELECT jung_sombra FROM $e WHERE jung_sombra IS NOT NULL;";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetchAll(PDO::FETCH_COLUMN);
//            return $fetch;
//        }
//
//        public function GetPalabraIE  ($e){
//            $sql= "SELECT palabras_$e FROM general;";
//            $query = $this->connectMBTI()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetchAll(PDO::FETCH_COLUMN);
//            return $fetch;
//        }
//    /////GET DATA BENZIGER////
//
//
//        public function ResultadosBenziger($e){
//            $sql = "SELECT Participante, HPI, HPD, HFI, HFD, HPI_Por, HPD_Por, HFI_Por, HFD_Por, INT_HPI, INT_HPD, INT_HFI, INT_HFD, DESCRIPTOR_INT_HPI,DESCRIPTOR_INT_HPD, DESCRIPTOR_INT_HFI, DESCRIPTOR_INT_HFD, HPI_Por, HPD_Por, HFI_Por, HFD_Por, DOM FROM resultadosbenziger WHERE Participante = '$e';";
//            $query = $this->connectBenziger()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetch();
//            return $fetch;
//        }
//        public function ReporteBenziger($e){
//            $sql= "SELECT `arquetipo`, `simbolo`, `prestaAtencion`, `AprendizajeValores`, `lenguajeInterno`, `utilizaLenguajePara`, `comunicacionFavorito`, `patronConversacion`, `patronPensamiento`, `frasesTipicas`, `percepcionPropia`, `percepcionAjena` FROM $e WHERE `id` = 1";
//            $query= $this->connectBenziger()-> query($sql);
//            $query->execute();
//            $fetch= $query->fetch();
//            return $fetch;
//
//        }