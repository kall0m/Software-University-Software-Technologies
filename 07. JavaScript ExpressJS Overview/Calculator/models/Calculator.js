function Calculator(leftOperand, operator, rightOperand) {
    this.leftOperand = leftOperand;
    this.operator = operator;
    this.rightOperand = rightOperand;

    this.calculateResult = function () {
        let result = 0;

        switch (this.operator) {
            case '+': result = this.leftOperand + this.rightOperand; break;
            case '-': result = this.leftOperand - this.rightOperand; break;
            case '*': result = this.leftOperand * this.rightOperand; break;
            case '/': result = this.leftOperand / this.rightOperand; break;
            case '^':
                result = 1;

                for(let i = 0; i < this.rightOperand; i++){
                    result *= this.leftOperand;
                }
                break;
            case 'AND': result = this.leftOperand & this.rightOperand; break;
            case 'OR': result = this.leftOperand | this.rightOperand; break;
            case 'XOR': result = this.leftOperand ^ this.rightOperand; break;
        }

        return result;
    }
}

module.exports = Calculator;