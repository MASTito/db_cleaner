<?php
/*
 * This file is part of FacturaScripts
 * 
 * @author Avantec Soluciones      contacto@avantec-solucion.es
 * @copyright 2017, Avantec Soluciones. All Rights Reserved.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

require_model('db_cleaner.php');

class db_cleaner extends fs_controller
{   
   public function __construct()
   {
      parent::__construct(__CLASS__, 'db_cleaner', 'admin');
   }
   
   protected function private_core()
   {      
      if (isset($_GET['eliminardatos']))
      {
	      $res = true;
	      
	      /* articulo */
	      $c_art = new clean_articulo();
	      $res = $res && $c_art->delete_all();
	      
	      /* familia */
	      $c_fam = new clean_familia();
	      $res = $res && $c_fam->delete_all();
	      	
	      /* fabricante */
	      $c_fab = new clean_fabricante();
	      $res = $res && $c_fab->delete_all();
	      
	      /* factura_cliente */
	      $c_fac_cli = new clean_factura_cliente();
	      $res = $res && $c_fac_cli->delete_all();
	      
	      /* factura_proveedor */
	      $c_fac_pro = new clean_factura_proveedor();
	      $res = $res && $c_fac_pro->delete_all();
	     
	      /* albaran_cliente */
	      $c_alb_cli = new clean_albaran_cliente();
	      $res = $res && $c_alb_cli->delete_all();
	      
	      /* albaran_proveedor */
	      $c_alb_pro = new clean_albaran_proveedor();
	      $res = $res && $c_alb_pro->delete_all();
	      
	      /* pedido_cliente */
	      $c_ped_cli = new clean_pedido_cliente();
	      $res = $res && $c_ped_cli->delete_all();
	      
	      /* pedido_proveedor */
	      $c_ped_pro = new clean_pedido_proveedor();
	      $res = $res && $c_ped_pro->delete_all();
	      
	      /* presupuesto_cliente */
	      $c_presu_cli = new clean_presupuesto_cliente();
	      $res = $res && $c_presu_cli->delete_all();
	     
	      /* cliente */
	      $c_cli = new clean_cliente();
	      $res = $res && $c_cli->delete_all();
	      
	      /* proveedor */
	      $c_pro = new clean_proveedor();
	      $res = $res && $c_pro->delete_all();
	      
	      /* asiento */
	      $c_asiento = new clean_asiento();
	      $res = $res && $c_asiento->delete_all();
	      	      
	      if($res)        
	      	$this->new_message('Datos eliminados correctamente');
	      else
	      	$this->new_error_msg('Hubo algún error al eliminar los datos');
      }
   }
}
