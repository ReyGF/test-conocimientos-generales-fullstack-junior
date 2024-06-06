# Diferencia entre var, let y const en JavaScript

- var: las declaraciones tienen un ambito global o de funcion es decir si se declara fuera de una funcion se puede usar en todo el programa en cambio si lo declaramos dentro de una funcion solo lo podremos usar dentro de esa funcion y pueden ser redeclaradase en su mismo ambito

- let: las declaraciones tienen un ambito de bloque es decir dentro de llaves, bloques if, while o funciones
  estas no pueden ser redeclaradas en su mismo ambito y pueden ser reasignadas

- const: las declaraciones tienen un ambito de bloque al igual que let pero estas no pueden ser reasignadas y redeclaradas ya que son valores inmutables
