package Services;

import DAO.TeachersDAO;
import DataSets.*;
import org.hibernate.HibernateException;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.boot.registry.StandardServiceRegistryBuilder;
import org.hibernate.cfg.Configuration;
import org.hibernate.service.ServiceRegistry;

import java.util.List;

public class TeacherService implements UserService_Interface{

    private final SessionFactory sessionFactory;
    private static final String hibernate_show_sql = "true";
    private static final String hibernate_hbm2ddl_auto = "update";

    public TeacherService() {
        Configuration configuration = getPostgreConfiguration();
        sessionFactory = createSessionFactory(configuration);
    }

    public Configuration getPostgreConfiguration() {
        Configuration configuration = new Configuration();
        configuration.addAnnotatedClass(AnswersDataSet.class);
        configuration.addAnnotatedClass(GroupsDataSet.class);
        configuration.addAnnotatedClass(MarksDataSet.class);
        configuration.addAnnotatedClass(QuestionsDataSet.class);
        configuration.addAnnotatedClass(StudentsDataSet.class);
        configuration.addAnnotatedClass(TeachersDataSet.class);
        configuration.addAnnotatedClass(TestsDataSet.class);
        configuration.setProperty("hibernate.dialect", "org.hibernate.dialect.PostgreSQL94Dialect");
        configuration.setProperty("hibernate.connection.driver_class", "org.postgresql.Driver");
        configuration.setProperty("hibernate.connection.url", "jdbc:postgresql://localhost:5432/postgres");
        configuration.setProperty("hibernate.connection.username", "postgres");
        configuration.setProperty("hibernate.connection.password", "masterpassword");
        configuration.setProperty("hibernate.show_sql", hibernate_show_sql);
        configuration.setProperty("hibernate.hbm2ddl.auto", hibernate_hbm2ddl_auto);

        return configuration;
    }

    private static SessionFactory createSessionFactory(Configuration configuration) {
        StandardServiceRegistryBuilder builder = new StandardServiceRegistryBuilder();
        builder.applySettings(configuration.getProperties());
        ServiceRegistry serviceRegistry = builder.build();
        return configuration.buildSessionFactory(serviceRegistry);
    }

    public void addUser(String name, String surname, String email, String password, String regDate) throws Exception {
        try {
            Session session = sessionFactory.openSession();
            Transaction transaction = session.beginTransaction();
            TeachersDAO dao = new TeachersDAO(session);
            dao.insertTeacher(name, surname, email, password, regDate);
            transaction.commit();
            session.close();
        } catch (HibernateException e) {
            throw new Exception(e);
        }
    }

    public TeachersDataSet getCurUserByLogin(String login) throws Exception{
        try {
            Session session = sessionFactory.openSession();
            TeachersDAO dao = new TeachersDAO(session);
            TeachersDataSet teacher = dao.getTeacherByLogin(login);
            session.close();
            return teacher;
        } catch (HibernateException e) {
            throw new Exception(e);
        }
    }

    public List<TeachersDataSet> getCurUserByFIO(String name, String surname, String patronymic) throws Exception{
        try {
            Session session = sessionFactory.openSession();
            TeachersDAO dao = new TeachersDAO(session);
            List<TeachersDataSet> teacher = dao.getTeachersByFIO(name, surname, patronymic);
            session.close();
            return teacher;
        } catch (HibernateException e) {
            throw new Exception(e);
        }
    }
}
