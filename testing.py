from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time
from selenium.webdriver.chrome.options import Options



	

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/-medtoolEcom/login.php")
txt_user = driver.find_element_by_id('email')
txt_password = driver.find_element_by_id('psw')
btn_submit = driver.find_element_by_id('psw_submit')

txt_user.send_keys('admin@gmail.com')
time.sleep(1)
txt_password.send_keys('123456789')
time.sleep(1)
btn_submit.click()

assert driver.current_url != 'http://192.168.0.1/userRpm/LoginRpm.htm?Save=Save'

print('Correct Login test - passed')

time.sleep(3)

driver.get("http://localhost/-medtoolEcom/adminDashboard.php")

btn_add= driver.find_element_by_id('add_product_btn')

driver.get("http://localhost/-medtoolEcom/addProduct.php")
driver.maximize_window()
product_name = driver.find_element_by_id('product_name')
product_des = driver.find_element_by_id('product_desc')
product_org_price = driver.find_element_by_id('original_price')
product_sell_price = driver.find_element_by_id('sale_price')
btn_add_submit = driver.find_element_by_id('productSubmitBtn')
btn_add_close = driver.find_element_by_id('close')





product_name.send_keys('labeeba')
time.sleep(1)
product_des.send_keys('is going to sleep')
time.sleep(1)
product_org_price.send_keys('120')
time.sleep(1)
product_sell_price.send_keys('430')

time.sleep(2)
btn_add_submit.click()
