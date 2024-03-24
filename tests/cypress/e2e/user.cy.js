var url = 'http://localhost:8888/iceithq/ci_ready';

describe('user', () => {
  it('should be able to initialize users', () => {
    cy.visit(url + '/setup/clear_users')
  })
  it('should be able to register', () => {
    cy.visit(url + '/register')
    cy.get('#email').type('test@mailinator.com')
    cy.get('#password').type('password')
    cy.get('#confirm_password').type('passwordx')
    cy.get('#register').click()
    cy.get('.text-danger').should('be.visible')
    cy.get('#password').type('password')
    cy.get('#confirm_password').type('password')
    cy.get('#register').click()
  })
  it('should be able to login', () => {
    cy.visit(url + '/login')
    cy.get('#username').type('test@mailinator.com')
    cy.get('#password').type('passwordx')
    cy.get('#login').click()
    cy.get('#message').should('be.visible')
    cy.get('#password').type('password')
    cy.get('#login').click()
    cy.get('#logout').click()
  })
  it('should be able to update profile', () => {
    cy.visit(url + '/login')
    cy.get('#username').type('test@mailinator.com')
    cy.get('#password').type('password')
    cy.get('#login').click()

    cy.get('#profile').click()
    cy.get('#email').clear()
    cy.get('#email').type('test@mailinator.com')
    cy.get('#password').clear()
    cy.get('#password').type('password')
    cy.get('#update').click()
    cy.get('#message').should('be.visible')
  })
})
