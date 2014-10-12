def instalar
   print "Estas segur@ de que desea instalar la gema? | si | no | \n"
   respuesta = gets.chomp
   if respuesta == "si"
      system('gem install ocra') #instalamos la gema ocra
   elsif respuesta == "no"
      exit
   else
      puts 'ERROR'
   end
end

def comprobar
   system('gem list --local') #Comprobamos que gemas tenemos
   print "Puedes ver la gema ocra ? | si | no |\n"
   contestar = gets.chomp
   if contestar == "si" #si respondemos <si> ...
      print "Perfecto , prosigamos con la compilacion...\n" #imprimira esto en pantalla
      compilar #ejecutara la funcion compilar
   elsif contestar == "no" #si contestara <no>...
      print "Procediendo a instalar la gema ruby , espero unos segundos...\n" #imprimira esto en pantalla
      instalar #ejecutariamos la funcion instalar
   else #de lo contrario , si no es ninguna de esas dos...
      print "error , vuelva a contestar y compruebe que escribe bien <si> o <no>\n" #imprimira esto en pantalla
   end
end

def compilar
   puts 'Escriba la ruta del script.rb , ej : C:\carpeta\script.rb'
   @scriptrb = gets.chomp

   puts 'Escriba la ruta del script.exe , ej : C:\carpeta\script.exe'
   @scriptexe = gets.chomp

   system('ocra --output ' + @scriptexe + ' ' + @scriptrb) #ejecutamos el compilador ocra para que compile

   print "Compilado !\n"
end

print "Tienes instalada la ocra gem? | Si | No | Comprobar |\n"
@enviar = gets.chomp

if @enviar == "Si" # si la respuesta es <Si> , entonces pasaremos al proceso de compilado
   compilar
elsif @enviar == "No" # si la respuesta es <No> , nos instalara la gema.
   instalar
elsif @enviar == "Comprobar"
   comprobar
else
   print "ERROR"
end