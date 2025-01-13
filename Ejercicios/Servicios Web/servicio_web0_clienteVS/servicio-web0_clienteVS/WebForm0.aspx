<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebForm0.aspx.cs" Inherits="servicio_web0_clienteVS.WebForm0" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Formulario Cliente 0</title>
    <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
    <form id="form1" runat="server">
            <!--Ejercicio 1.-->

        <div id ="d1" class="division"> 
            <h2>Ejercicio 1. Número de caracteres</h2>
            <asp:Label class="etiqueta" ID="l1" runat="server" Text="Texto: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t1" runat="server"></asp:TextBox><br />
            <asp:Label class="etiqueta" ID="l2" runat="server" Text="Número de caracteres: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t2" runat="server"></asp:TextBox><br />
            <asp:Button ID="Button1" runat="server" Text="Número de caracteres escritos" ForeColor="#12329E" OnClick="b1_Click" /><br /><br />

        </div>

        <!--Ejercicio 2.-->

        <div id = "d2" class="division">
            <h2>Ejercicio 2. Potencia</h2>
            <asp:Label class="etiqueta" ID="l3" runat="server" Text="Introduce la base: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t3" runat="server"></asp:TextBox><br />
            <asp:Label class="etiqueta" ID="l4" runat="server" Text="Introduce el exponente: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t4" runat="server"></asp:TextBox><br />
            <asp:Label class="etiqueta" ID="l5" runat="server" Text="Resultado: " Font-Names="Calibri" ForeColor="#0632C6"></asp:Label>
            <asp:TextBox class="texto" ID="t5" runat="server"></asp:TextBox><br />
            <asp:Button ID="b2" runat="server" Text="Calcular Potencia" ForeColor="#12329E" OnClick="b2_Click" /><br /><br />

        </div>
    </form>
</body>
</html>
