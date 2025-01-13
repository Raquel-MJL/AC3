<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebForm1.aspx.cs" Inherits="servicioweb2.WebForm1" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Formulario cliente 1</title>
	<link rel="stylesheet" href="css/estilos.css" />

</head>
<body>
    <form id="form1" runat="server">

        <!--Ejercicio 1.-->

        <div id ="d1" class="division"> 
            <asp:Label class="etiqueta" ID="Label1" runat="server" Text="Nombre: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t1" runat="server"></asp:TextBox><br />
            <asp:Label class="etiqueta" ID="Label2" runat="server" Text="Primer apellido: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t2" runat="server"></asp:TextBox><br />
            <asp:Label class="etiqueta" ID="Label3" runat="server" Text="Segundo apellido: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t3" runat="server"></asp:TextBox><br />
            <asp:Label class="etiqueta" ID="Label4" runat="server" Text="Te llamas: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t4" runat="server" Width="318px"></asp:TextBox><br />
           <asp:Button ID="Button1" runat="server" Text="Aceptar" ForeColor="#12329E" OnClick="Button1_Click" /><br /><br />

        </div>

        <!--Ejercicio 2.-->

        <div id = "d2" class="division">
            <asp:Label class="etiqueta" ID="Label5" runat="server" Text="Primera Nota: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t5" runat="server"></asp:TextBox><br />
            <asp:Label class="etiqueta" ID="Label6" runat="server" Text="Segunda Nota: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t6" runat="server"></asp:TextBox><br />
            <asp:Label class="etiqueta" ID="Label7" runat="server" Text="Tercera Nota: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t7" runat="server"></asp:TextBox><br />
            <asp:Label class="etiqueta" ID="Label8" runat="server" Text="Nota Media: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t8" runat="server" Width="129px"></asp:TextBox><br />
            <asp:Button ID="Button2" runat="server" Text="Calcular Media" ForeColor="#12329E" OnClick="Button2_Click" /><br /><br />

        </div>

        <!--Ejercicio 3.-->

        <div id = "d3" class="division">
            <asp:Label class="etiqueta" ID="Label9" runat="server" Text="Cantidad: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t9" runat="server"></asp:TextBox><br />
            <asp:Label class="etiqueta" ID="Label10" runat="server" Text="Precio: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t10" runat="server"></asp:TextBox><br />
            <asp:Label class="etiqueta" ID="Label11" runat="server" Text="I.V.A.: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t11" runat="server"></asp:TextBox><br />
            <asp:Label class="etiqueta" ID="Label12" runat="server" Text="Subtotal: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t12" runat="server" Width="129px"></asp:TextBox><br />
            <asp:Label class="etiqueta" ID="Label13" runat="server" Text="Total: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t13" runat="server" Width="129px"></asp:TextBox><br />
            <asp:Button ID="Button3" runat="server" Text="Calcular Totales" ForeColor="#12329E" OnClick="Button3_Click" /><br /><br />

        </div>

    </form>
</body>
</html>
