using Microsoft.AspNetCore.Mvc;

namespace ejercicio52.Controllers
{
    
    public class TotalController : Controller
    {
       
        [HttpGet("total")]
        public IActionResult Total(int cantidad)
        {
            
            double precioCastana = 0.50;

            
            double precioTotal = cantidad * precioCastana;

            if (cantidad > 10)
            {
                precioTotal -= 1.0; 
            }

            
            return Ok(new { Cantidad = cantidad, PrecioFinal = precioTotal });
        }

        //FECHA PEDIDO 
        [HttpGet("fecha_pedido")]
        public IActionResult Fecha_Pedido()
        {
            
            DateTime fechaPedido = DateTime.Now;
            return Ok(new { FechaPedido = fechaPedido });
        }
    }
}

