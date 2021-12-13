<?php

namespace App\Http\Controllers\Factory;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Factory\Implements\Dashboard;
use App\Http\Controllers\Factory\Implements\Order;
use App\Http\Controllers\Factory\Implements\Product;
use Illuminate\Http\Request;

class Factory
{
    public function getController(String $contollerType)
    {
        if ($contollerType == null) {
            return null;
        }
        if (strcasecmp($contollerType, 'dashboard') == 0) {
            return new Dashboard;
        }
        if (strcasecmp($contollerType, 'order') == 0) {
            return new Order;
        }
        if (strcasecmp($contollerType, 'product') == 0) {
            return new Product;
        }
    }
}
//
/**
 * 
public class ShapeFactory {
	
   //use getShape method to get object of type shape 
   public Shape getShape(String shapeType){
      if(shapeType == null){
         return null;
      }		
      if(shapeType.equalsIgnoreCase("CIRCLE")){
         return new Circle();
         
      } else if(shapeType.equalsIgnoreCase("RECTANGLE")){
         return new Rectangle();
         
      } else if(shapeType.equalsIgnoreCase("SQUARE")){
         return new Square();
      }
      
      return null;
   }
}
 */
