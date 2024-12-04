<?php
class CocheDAO implements ICocheDAO {
      private $archivo = 'Coches.json';
        public function crear(Coche $coche)
        {
            if (!file_exists($this->archivo)) {
                file_put_contents($this->archivo, json_encode([], JSON_PRETTY_PRINT)); 
            }
    
            $json_read = file_get_contents($this->archivo);            
            $coches = json_decode($json_read, true);
            
            $existe = false;
            foreach ($coches as $existingCoche) {
                if ($existingCoche['matricula'] == $coche->matricula) {
                    $existe = true;
                    break;
                }
            }
            if (!$existe) {
                $coches[] = [
                    "matricula" => $coche->matricula,
                    "marca" => $coche->marca,
                    "modelo" => $coche->modelo
                ];
                
                $json_write = json_encode($coches, JSON_PRETTY_PRINT);
                if (file_put_contents($this->archivo, $json_write) === false) {
                    die("No se pudo guardar el$this->archivo JSON.");
                }
                
                echo "Coche añadido con éxito.\n";
                return true;
            } else {
                echo "El coche con matrícula \"$coche->matricula\" ya está en la lista.\n";
                return false;
            }
        }
    
    public function obtenerCoche($matricula)
    {
        if (!file_exists($this->archivo)) {
            file_put_contents($this->archivo, json_encode([], JSON_PRETTY_PRINT)); 
        }

        $json_read = file_get_contents($this->archivo);
        
        $coches = json_decode($json_read, true);

        foreach ($coches as $existingCoche) {
            if ($existingCoche['matricula'] == $matricula) {
                $alex =new Coche($matricula, $existingCoche['marca'], $existingCoche['modelo']);
                $alex->potencia = $existingCoche['potencia'];
                $alex->velocidadMax = $existingCoche['velocidadMax'];
                return $alex;
            }
        }
        return null; // no localizado 
    }

    public function eliminar($matricula)
{
    
    if (!file_exists($this->archivo)) {
        file_put_contents($this->archivo, json_encode([], JSON_PRETTY_PRINT)); 
    }

    $json_read = file_get_contents($this->archivo);
    $coches = json_decode($json_read, true);
    $eliminado = false;
    $coches = array_filter($coches, function($coche) use ($matricula, $eliminado) {
        $mike = $coche['matricula'] !== $matricula;
        if ($mike == false) {
            $eliminado = true;
        }
    });

    if ($eliminado) {
        $coches = array_values($coches);

        if (file_put_contents($this->archivo, json_encode($coches, JSON_PRETTY_PRINT)) === false) {
            die("No se pudo guardar el$this->archivo JSON.");
        }
    
        echo "Coche con matrícula '$matricula' eliminado.\n";

        return true;
    } 
    return false;
   

}

    public function actualizar($matricula, Coche $nuevoCoche)
    {
        $existe = false;
    
    if (!file_exists($this->archivo)) {
        file_put_contents($this->archivo, json_encode([], JSON_PRETTY_PRINT)); 
    }

    $json_read = file_get_contents($this->archivo);
    $coches = json_decode($json_read, true);

    foreach ($coches as $existingCoche) {
        if ($existingCoche != null) {
            if ($existingCoche['matricula'] == $matricula) {
                $existe = true;
                echo "si";
             }
        } else {
            echo "null";
        }

    }

    $coches = array_filter($coches, function($coche) use ($matricula) {
        return $coche['matricula'] !== $matricula;
    });

    $coches = array_values($coches);
    if ($existe == true) {
        $coches[] = [
            "matricula" => $nuevoCoche->matricula,
            "marca" => $nuevoCoche->marca,
            "modelo" => $nuevoCoche->modelo
        ];
    }
    if (file_put_contents($this->archivo, json_encode($coches, JSON_PRETTY_PRINT)) === false) {
        die("No se pudo guardar el$this->archivo JSON.");
    }

    echo "Coche con matrícula '$matricula' eliminado.\n";
    }

    public function verTodos()
    {
            
        if (!file_exists($this->archivo)) {
            file_put_contents($this->archivo, json_encode([], JSON_PRETTY_PRINT)); 
        }

        $json_read = file_get_contents($this->archivo);
        
        $coches = json_decode($json_read, true);
    
    }
}
?>