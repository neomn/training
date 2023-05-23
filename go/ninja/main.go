package main // a custom package name
import "fmt"

func main() { 
  fmt.Println("hellow world")
  var neo string = "my name is neo"
  var lastName = "nik"
  var output string
  output = neo + lastName
  noVar:= "declareing var without using var"
  fmt.Println(output)
  fmt.Println(noVar)

  age1 := 20
  age2 := 30
  fmt.Println(age1, age2)
}

