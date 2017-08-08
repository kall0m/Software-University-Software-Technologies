package com.softuni.entity;

public class Calculator {
    private double leftOperand;
    private double rightOperand;
    private String operator;

    public Calculator(double leftOperand, double rightOperand, String operator) {
        this.leftOperand = leftOperand;
        this.rightOperand = rightOperand;
        this.operator = operator;
    }

    public double getLeftOperand() {
        return leftOperand;
    }

    public void setLeftOperand(double leftOperand) {
        this.leftOperand = leftOperand;
    }

    public double getRightOperand() {
        return rightOperand;
    }

    public void setRightOperand(double rightOperand) {
        this.rightOperand = rightOperand;
    }

    public String getOperator() {
        return operator;
    }

    public void setOperator(String operator) {
        this.operator = operator;
    }

    public double calculateResult(){
        double result;

        switch (this.operator){
            case "+":
                result = this.getLeftOperand() + this.getRightOperand();
                break;
            case "-":
                result = this.getLeftOperand() - this.getRightOperand();
                break;
            case "*":
                result = this.getLeftOperand() * this.getRightOperand();
                break;
            case "/":
                if(this.getRightOperand() == 0){
                    throw new IllegalArgumentException("Cannot divide by zero!");
                }
                result = this.getLeftOperand() / this.getRightOperand();
                break;
            case "^":
                result = 1;
                for (int i = 1; i <= this.getRightOperand(); i++) {
                    result *= this.getLeftOperand();
                }
                break;
            case "AND":
                result = (int)this.getLeftOperand() & (int)this.getRightOperand();
                break;
            case "OR":
                result = (int)this.getLeftOperand() | (int)this.getRightOperand();
                break;
            case "XOR":
                result = (int)this.getLeftOperand() ^ (int)this.getRightOperand();
                break;
            default:
                result = 0;
                break;
        }

        return result;
    }
}
