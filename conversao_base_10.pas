Program Pzim ;
uses crt;
var
  num, base, x, i:integer;
  resto:array[1..255] of integer;
  resp:char;

function calcula_contador (num, base:integer):integer;
var valor,x:integer;
begin
  while (num>=base) do
  begin
    x:=num mod base;
    num:=num div base;
    valor:=valor+1;
  end;
  valor:=valor+1;
  calcula_contador:=valor;
end;

procedure converterBin(num:integer);
var x:integer;
begin
  x:=calcula_contador(num,2);
  for i:=1 to x do
  begin
    resto[i]:=num mod 2;
    num:=num div 2;
  end;
  for i:=x downto 1 do
  begin
    write(resto[i]);
  end;
end;

procedure converterOct(num:integer);
var x:integer;
begin
  x:=calcula_contador(num,8);
  for i:=1 to x do
  begin
    resto[i]:=num mod 8;
    num:=num div 8;
  end;
  for i:=x downto 1 do
  begin
    write(resto[i]);
  end;
end;

procedure converterHex(num:integer);
var x:integer;
begin
  x:=calcula_contador(num,16);
  for i:=1 to x do
  begin
    resto[i]:=num mod 16;
    num:=num div 16;
  end;
  for i:=x downto 1 do
  begin
      if (resto[i] = 10) then
      begin
        write('A');
      end
      else
      if (resto[i] = 11) then
      begin
        write('B');
      end
      else
      if (resto[i] = 12) then
      begin
        write('C');
      end
      else
      if (resto[i] = 13) then
      begin
        write('D');
      end
      else
      if (resto[i] = 14) then
      begin
        write('E');
      end
      else
      if (resto[i] = 15) then
      begin
        write('F');
      end
      else
        write(resto[i]);
  end;
end;
  
Begin
  repeat
   write('Qual a base desse número: ');
   read(base);
   case (base) of 
   10:
   begin
   write('Digite o número que deseja converter: ');
   read(num);
    clrscr;
    write('Valor na base Binário: ');
    converterBin(num);writeln;
    write('Valor na base Octal: ');
    converterOct(num);writeln;
    write('Valor na base Hexadecimal: ');
    converterHex(num);writeln;
   end;
   else
    write('Base Inválida!');
   end;
   readkey;
   clrscr;
   write('Deseja converter outro número? [s/n]: ');
   read(resp);
   clrscr;
  until (resp='n');
  writeln('Fim do Programa!'); 
End.